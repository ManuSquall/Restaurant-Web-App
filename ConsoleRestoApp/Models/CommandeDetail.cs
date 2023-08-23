namespace Console.RestoApp.Models
{
    public class CommandeDetail
    {
        public int Id { get; set; }
        public int Quantite { get; set; }

        public int ProduitId { get; set; }
        public Produit Produit { get; set; } = null!;
        public int CommandeId { get; set; }
        public Commande Commande { get; set; } = null!;
        

        
        
    }
}