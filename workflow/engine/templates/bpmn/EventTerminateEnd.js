bpmnEventTerminate=function(){
VectorFigure.call(this);
this.setDimension(30,30);
this.stroke=2;
};
bpmnEventTerminate.prototype=new VectorFigure;
bpmnEventTerminate.prototype.type="bpmnEventTerminateEnd";
bpmnEventTerminate.prototype.paint=function(){
VectorFigure.prototype.paint.call(this);
VectorFigure.prototype.paint.call(this);
this.graphics.setStroke(this.stroke);
var x_cir = 0;
var y_cir = 0;

this.graphics.setColor("#c0c0c0");
this.graphics.fillEllipse(x_cir+5,y_cir+5,this.getWidth(),this.getHeight());
this.graphics.setStroke(this.stroke);
this.graphics.setColor( "#f7f1e5" );
this.graphics.fillEllipse(x_cir,y_cir,this.getWidth(),this.getHeight());
this.graphics.setColor("#c46508");
this.graphics.drawEllipse(x_cir,y_cir,this.getWidth(),this.getHeight());
var x_cir2=5;
var y_cir2=5;
this.graphics.setColor("#c46508");
this.graphics.fillEllipse(x_cir2,y_cir2,this.getWidth()-10,this.getHeight()-10);
this.graphics.setColor("#c46508");
this.graphics.drawEllipse(x_cir2,y_cir2,this.getWidth()-10,this.getHeight()-10);
this.graphics.paint();

/*Code Added to Dynamically shift Ports on resizing of shapes
 **/
if(this.input1!=null){
this.input1.setPosition(0,this.height/2);
}
if(this.output1!=null){
this.output1.setPosition(this.width/2,this.height);
}
if(this.input2!=null){
this.input2.setPosition(this.width/2,0);
}
if(this.output2!=null){
this.output2.setPosition(this.width,this.height/2);
}
};

bpmnEventTerminate.prototype.setWorkflow=function(_40c5){
VectorFigure.prototype.setWorkflow.call(this,_40c5);
if(_40c5!=null){
    var eventPortName = ['input1','input2'];
    var eventPortType = ['InputPort','InputPort'];
    var eventPositionX= [this.width/2,0];
    var eventPositionY= [0,this.height/2];

    for(var i=0; i< eventPortName.length ; i++){
        eval('this.'+eventPortName[i]+' = new '+eventPortType[i]+'()');                               //Create New Port
        eval('this.'+eventPortName[i]+'.setWorkflow(_40c5)');                                        //Add port to the workflow
        eval('this.'+eventPortName[i]+'.setName("'+eventPortName[i]+'")');                            //Set PortName
        eval('this.'+eventPortName[i]+'.setZOrder(-1)');                                             //Set Z-Order of the port to -1. It will be below all the figure
        eval('this.'+eventPortName[i]+'.setBackgroundColor(new Color(255, 255, 255))');              //Setting Background of the port to white
        eval('this.'+eventPortName[i]+'.setColor(new Color(255, 255, 255))');                        //Setting Border of the port to white
        eval('this.addPort(this.'+eventPortName[i]+','+eventPositionX[i]+', '+eventPositionY[i]+')');  //Setting Position of the port
     }
 }
};

bpmnEventTerminate.prototype.getContextMenu=function(){
if(this.id != null){
   this.workflow.handleContextMenu(this);
}
};
