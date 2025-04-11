// Create runways
var runway1 = new Runway();
var runway2 = new Runway();
Runway[] runways = { runway1, runway2 };

// Create aircrafts
var aircraft1 = new Aircraft("Boeing 737", 300, null);
var aircraft2 = new Aircraft("Airbus A320", 250, null);
Aircraft[] aircrafts = { aircraft1, aircraft2 };

// Create CommandCentre (Mediator)
var commandCentre = new CommandCentre(runways, aircrafts);

// Assign command centre to aircrafts
aircraft1.commandCentre = commandCentre;
aircraft2.commandCentre = commandCentre;

// Land aircraft on runway1
aircraft1.Land(runway1);  // This will land aircraft1 on runway1

// Attempt to land another aircraft on runway1 (which should be busy)
aircraft2.Land(runway1);

// Take off aircraft1 from runway1
aircraft1.TakeOff(runway1);

// Now attempt to land aircraft2 on runway1 (which should be free)
aircraft2.Land(runway1);