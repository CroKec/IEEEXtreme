
//animation of about Xtreme
$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 1) {
        $("#anim_about").addClass("animated zoomIn");
    }
});

//animation of Xtreme timetable
$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 250) {
        $("#xt_te").addClass("animated zoomIn");
    }
});

//scroll animation

 $(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
     });


// d3.js visualization script

d3.select(window).on("resize", throttle);

var width = document.getElementById('map').offsetWidth;
var height = width / 2;

var topo,projection,path,svg,g;

var tooltip = d3.select("#map").append("div").attr("class", "tooltip2 hidden");

setup(width,height);

function setup(width,height){
  projection = d3.geo.mercator()
	.translate([(width/2), (height/1.5)])
    .scale( width / 2.5 / Math.PI);

  path = d3.geo.path().projection(projection);

  svg = d3.select("#map").append("svg")
      .attr("width", width)
      .attr("height", height)
      .append("g");

  g = svg.append("g");

}

d3.json("data/worldIEEE.json", function(error, world) {
  var countries = topojson.feature(world, world.objects.countries).features;
  topo = countries;
  draw(topo);
});

function draw(topo) {

  var country = g.selectAll(".country").data(topo);

  country.enter().insert("path")
      .attr("class", "country")
      .attr("d", path)
	  .attr("stroke","black")
	  .attr("stroke-width","0.5")
	  .attr("opacity","0.8")
      .attr("id", function(d,i) { return d.id; })
      .style("fill", function(d, i) { return d.properties.color; });

  var offsetL = document.getElementById('map').offsetLeft+20;
  var offsetT = document.getElementById('map').offsetTop+10;

  country
    .on("mousemove", function(d,i) {

      var mouse = d3.mouse(svg.node()).map( function(d) { return parseInt(d); } );

      tooltip.classed("hidden", false)
             .attr("style", "left:"+(mouse[0]+offsetL)+"px;top:"+(mouse[1]+offsetT)+"px")
			 .html("<center>" + d.properties.name + "</center>" + d.properties.team + "<br>" + d.properties.parti + "<br>" + d.properties.top);
      })
      .on("mouseout",  function(d,i) {
        tooltip.classed("hidden", true);
      });

  d3.csv("data/nazivi.csv", function(err, capitals) {
    capitals.forEach(function(i){
      addpoint(i.Longitude, i.Latitude, i.Name, i.Color );
    });

  });

}

function redraw() {
  width = document.getElementById('map').offsetWidth;
  height = width / 2;
  d3.select('svg').remove();
  setup(width,height);
  draw(topo);
}

var throttleTimer;
function throttle() {
  window.clearTimeout(throttleTimer);
    throttleTimer = window.setTimeout(function() {
      redraw();
    }, 200);
}

function addpoint(lat,lon,text,Color) {

  var gpoint = g.append("g").attr("class", "gpoint");
  var x = projection([lat,lon])[0];
  var y = projection([lat,lon])[1];

    gpoint.append("text")
          .attr("x", x+2)
          .attr("y", y+2)
          .attr("class","text")
          .text(text)
		  .style("fill", Color);
}

