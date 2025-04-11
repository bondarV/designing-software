class Runway
{
    private readonly Guid Id = Guid.NewGuid();
    public Aircraft? IsBusyWithAircraft { get; set; }

    public bool CheckIsActive()
    {
        return this.IsBusyWithAircraft != null;
    }

    public void HighLightRed()
    {
        Console.WriteLine($"Runway {this.Id} is busy!");
    }

    public void HighLightGreen()
    {
        Console.WriteLine($"Runway {this.Id} is free!");
    }
}