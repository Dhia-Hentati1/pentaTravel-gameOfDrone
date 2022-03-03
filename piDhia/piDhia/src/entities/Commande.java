package entities;

public class Commande {

    private int id;
    private int idu;
    private int ide;
    private float prix;

    public Commande(float prix, String description) {
        this.prix = prix;
        this.description = description;
    }
    private String description;

    public Commande(int id, int idu, int ide, float prix, String description) {
        this.id = id;
        this.idu = idu;
        this.ide = ide;
        this.prix = prix;
        this.description = description;
    }

    public Commande(int idu, int ide, float prix, String description) {
        this.idu = idu;
        this.ide = ide;
        this.prix = prix;
        this.description = description;
    }

    public Commande(int id) {
        this.id = id;
    }

    
    
    /*public Commande(int idu, String dateoperation, float montant, String modedepaiement) {
        this.idu = idu;
        this.dateoperation = dateoperation;
        this.montant = montant;
        this.modedepaiement = modedepaiement;
    }

    public Commande(String dateoperation, float montant, String modedepaiement) {

        this.dateoperation = dateoperation;
        this.montant = montant;
        this.modedepaiement = modedepaiement;
    }

    public Commande(int idreglement) {
        this.idreglement = idreglement;
    }*/

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdu() {
        return idu;
    }

    public void setIdu(int idu) {
        this.idu = idu;
    }

    public int getIde() {
        return ide;
    }

    public void setIde(int ide) {
        this.ide = ide;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    @Override
    public String toString() {
        return "Commande{" + "id=" + id + ", idu=" + idu + ", ide=" + ide + ", prix=" + prix + ", description=" + description + '}';
    }

    

}
