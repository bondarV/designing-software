class CommandCentre
    {
        private List<Runway> _runways = new List<Runway>();
        private List<Aircraft> _aircrafts = new List<Aircraft>();
        
        public Runway? CurrentRunway { get; set; }

        public CommandCentre(Runway[] runways, Aircraft[] aircrafts)
        {
            this._runways.AddRange(runways);
            this._aircrafts.AddRange(aircrafts);
        }

        public void LandPlane(Runway runway, Aircraft aircraft)
        {
            Console.WriteLine($"Aircraft {aircraft.Name} is landing.");
            Console.WriteLine($"Checking runway.");

            if (_runways.Contains(runway))
            {
                if (runway.IsBusyWithAircraft == null)
                {
                    Console.WriteLine($"Aircraft {aircraft.Name} has landed.");
                    runway.IsBusyWithAircraft = aircraft;
                    runway.HighLightRed();
                    aircraft.CurrentRunway = runway;
                }
                else
                {
                    Console.WriteLine($"Could not land, the runway is busy.");
                }
            }
            else
            {
                Console.WriteLine("Runway not found.");
            }
        }

        public void TakeOff(Runway runway, Aircraft aircraft)
        {
            if (_runways.Contains(runway))
            {
                if (runway.IsBusyWithAircraft == aircraft)
                {
                    Console.WriteLine($"Aircraft {aircraft.Name} is taking off.");
                    runway.IsBusyWithAircraft = null;
                    aircraft.CurrentRunway = null;
                    runway.HighLightGreen();
                    Console.WriteLine($"Aircraft {aircraft.Name} has taken off.");
                }
                else
                {
                    Console.WriteLine("There was a slight problem with finding matched runway.");
                }
            }
            else
            {
                Console.WriteLine("Runway not found.");
            }
        }
    }
    