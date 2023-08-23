namespace Console.RestoApp.Models
{
    public class Commande
    {
        public int Id { get; set; }

        public string Numero { get; set; } = null!;

        public string ModePayement { get; set; } = null!;

        public int Total { get; set;}
        public int ClientId { get; set;}
        public Client Client { get; set; } = null!;
        public ICollection<CommandeDetail> CommandeDetails { get; set; } = null!;
    }
}