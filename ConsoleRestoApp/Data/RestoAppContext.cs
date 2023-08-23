using Console.RestoApp.Models;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Internal;
using System;

/// <summary>
/// Un context est une session à la bd
/// </summary>
public class RestoAppContext : DbContext
{
	public DbSet<Client> Clients { get; set; } = null!;
	public DbSet<Commande> Commandes { get; set; } = null!;
	public DbSet<Produit> Produits { get; set; } = null!;
	public DbSet<CommandeDetail> CommandeDetails { get; set; } = null!;

    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlServer("ef core connection strings");
    }
}
