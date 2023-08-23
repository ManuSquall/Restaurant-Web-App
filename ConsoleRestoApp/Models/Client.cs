using System.ComponentModel.DataAnnotations;

namespace Console.RestoApp.Models
{
    public class Client
    {
        public int Id { get; set; }
        public string FirstName { get; set; } = null!;
        public string LastName { get; set; } = null!;
        public string? Telephone { get; set; }
        public ICollection<Commande> Commandes { get; set; } = null!;
    }
}