namespace Console.RestoApp.Models
{
    public class Produit
    {
        public int Id { get; set; }

        public string Libelle { get; set; } = null!;
        public int Prix { get; set; }
    }
}