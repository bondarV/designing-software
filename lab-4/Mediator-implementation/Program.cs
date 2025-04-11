
var runway1 = new Runway();
var runway2 = new Runway();
Runway[] runways = { runway1, runway2 };


var aircraft1 = new Aircraft("Boeing 737", 300, null);
var aircraft2 = new Aircraft("Airbus A320", 250, null);
Aircraft[] aircrafts = { aircraft1, aircraft2 };


var commandCentre = new CommandCentre(runways, aircrafts);


aircraft1.commandCentre = commandCentre;
aircraft2.commandCentre = commandCentre;


aircraft1.Land(runway1);  


aircraft2.Land(runway1);


aircraft1.TakeOff(runway1);


aircraft2.Land(runway1);