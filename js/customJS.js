// google_translate
      	

// google_translate

//theme color
$('#grayButton').click(switchGray);
$('#blueButton').click(switchBlue);

function switchGray() {
  $('body').attr('class', 'black');
}

function switchBlue() {
  $('body').attr('class', 'blue');
}
//theme color



/*Live Date Script*/

/*end Live Date Script*/







// FONT size 

var $affectedElements = $("a, h1, p, h2, h3, h4, h5, span,  div"); // Can be extended, ex. $("div, p, span.someClass")


$affectedElements.each( function(){
  var $this = $(this);
  $this.data("orig-size", $this.css("font-size") );
});

$("#btn-increase").click(function(){
  changeFontSize(1);
})

$("#btn-decrease").click(function(){
  changeFontSize(-1);
})

$("#btn-orig").click(function(){
  $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , $this.data("orig-size") );
   });
})

function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
}
// END FONT size 

































