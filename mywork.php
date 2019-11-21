<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Assignment</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />

</head>

<body>
<script>
//create an object paint
//var paint = new Object();
//add attributes to the paint object
//paint.manufacturer = "Crown";
//paint.color ="Blue";
//paint.texture = "gloss";
//var l=5,w=10;
//return l*w; 
//var parameters=new Array();
//var paints=[];
//paints.push(paint);


//Blueconsole.log(paint.applicationarea());

//create a prototyping function
function paint (man,col,tex,l,w){
    this.manufacturer=man;
    this.color=col;
    this.texture=tex;
    this.applicationarea=function(){

    };
}
var paint1=new paint("Duracoat","Maroon","matte",15,3);
var paint2=new paint("solai","Black","sand",10,2)


//new array
var newpaints=[];
newpaints.push(paint1);
newpaints.push(paint2);
//loop through the array and retrieve the paint names
for(var i=0;i<newpaints.length;i++){
    console.log(newpaints[i]["color"]);
}

console.log(newpaints)
</script>
</body>

</html>