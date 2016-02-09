var ClickCounter = 0;


$(document).ready(function() {
	
	$('#chicken').animate({
		left: (Math.random() * ($(document).width() - 150)) ,
		top: -(Math.random() * ($(document).height() - 150))},
		{
			duration: 1,
		});
	
	move(14);

$('#chicken').click(function(e,move){
	$('#chicken').stop();
	for(var j = 0; j < 100; j ++)
	{
		NUKEM(Math.floor(Math.random() * 133), e);
	}
//	move(14);
});

});
function NUKEM(number,e)
{
	//spawn a chicken onto the page
	$("<img id='attackChicken" + number + "'  src='js/chickens.gif' width='100px' height='100px' style='position:absolute;' zindex='" + number  + "'></img>").insertAfter($("#chicken"));


	//decide if we want him starting on left side
	if((Math.floor((Math.random() * 12)) % 2) == 1)
	{	
	$('#attackChicken' + number).animate({
		left: 0 ,
		top: (Math.random() * ($(document).height() - 150))},
		{
			duration: 1,
		});
	
	$('#attackChicken' + number).animate({
			left: e.pageX + Math.floor(Math.random() * 100),
			top: e.pageY + Math.floor(((Math.random() * 2) - 1) * 100)},
		{
			duration: Math.random() * 2000,
			complete: function(){
				$("#attackChicken" + number).remove();
			}
		});
	}
	//or if we want the chicken starting on the right side
	else
	{	
	$('#attackChicken' + number).animate({
		left: ($(document).width() - 200),
		top: (Math.random() * ($(document).height() - 150))},
		{
			duration: 1,
		});
	
	$('#attackChicken' + number).animate({
			left: e.pageX - Math.floor(Math.random() * 100),
			top: e.pageY + Math.floor(((Math.random() * 2) - 1) * 100)},
			{
			duration: Math.random() * 2000,
			complete: function(){
				$("#attackChicken" + number).remove();
			}
		});
	}	
}

function move(a){
	var Radius = (Math.random() * 100);
	var Theta = ((Math.random() * (Math.PI * 2)));
	
	var YCoord = ($('#chicken').offset().top)
	var XCoord = ($('#chicken').offset().left)
	
	var DistY = (Radius * Math.sin(Theta));	
	var DistX = (Radius * Math.cos(Theta));	
	
	if(YCoord + DistY < 0 || YCoord + DistY > ($(document).height()) - 300)
	{
		YCoord = YCoord - DistY; 	
	}
	else
	{
		YCoord = YCoord + DistY;
	}

	if(XCoord + DistX < 0 || XCoord + DistX > ($(document).width()) - 300)
	{
		XCoord = XCoord - DistX;	
	}
	else
	{
		XCoord = XCoord + DistX;
	}

	var TotalDist = Math.sqrt(DistX * DistX + DistY + DistY);
	var NewX;
	var NewY;
	for (var i = 0; i < TotalDist; i += Math.PI/8) {

		if (XCoord + DistX < 0 || XCoord + DistX > $(document).width() - 300)
			NewX = XCoord - ((i/TotalDist)*DistX);
		else
			NewX = XCoord + ((i/TotalDist)*DistX);
		if (YCoord + DistY < 0 || YCoord + DistY > $(document).height() - 300)
			NewY = YCoord - ((i/TotalDist)*DistY) - (Math.abs(Math.sin(i))*20);
		else
			NewY = YCoord + ((i/TotalDist)*DistY) - (Math.abs(Math.sin(i))*20); 

		$('#chicken').animate({
			top: NewY, left: NewX
		},{
			duration:50
		});
	}
	$('#chicken').animate({
		left: XCoord,
		top: YCoord
	},
	{ 
		complete: function(){
			move(Math.floor(Math.random() * 7) + 1);}
	});
}
