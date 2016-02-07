var $j = jQuery.noConflict();

$j(document).ready(function() {
	
	$j("#sdSubmit").click(function() {   
		mySubmit();
	});
	/*$j("#startButton").click(function(){
		tick();
	});*/
	
});

function mySubmit () {
	/*if($j("#source").val() == 'a'){
		alert("A");
	}
	else{
		alert("None");
	}
*/	
	var currentTime = Date.now() / 1000;
	checkForPaths($j("#source").val(),$j("#destination").val(),currentTime)
	
	    
    

}

function checkForPaths( source, destination,timeofStart){
	var txtFile = "paths.txt";
	var file = new File(txtFile);
	file.open("r"); // open file with read access
	var str = "";
	while (!file.eof) {
		// read each line of text
		 file.readln() + "\n";
		 if
	};
	
	
}

function tick() {
	if (document.getElementById ('counter').firstChild.data > 0) {
		document.getElementById ('counter').firstChild.data = document.getElementById ('counter').firstChild.data - 1;
		setTimeout ('tick()', 1000);
	} else {
		mySubmit();		
	}
}
