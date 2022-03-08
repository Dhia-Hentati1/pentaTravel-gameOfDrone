package entities;

public class Commande {

    private int id;
    private int id_prop;
    private int ide;
    private float prix;
    private String description;

    public Commande(int id, int id_prop, int ide, float prix, String description) {
        this.id = id;
        this.id_prop = id_prop;
        this.ide = ide;
        this.prix = prix;
        this.description = description;
    }

    public Commande(int id_prop, int ide, float prix, String description) {
        this.id_prop = id_prop;
        this.ide = ide;
        this.prix = prix;
        this.description = description;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getId_prop() {
        return id_prop;
    }

    public void setId_prop(int id_prop) {
        this.id_prop = id_prop;
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
        return "Commande{" + "id=" + id + ", id_prop=" + id_prop + ", ide=" + ide + ", prix=" + prix + ", description=" + description + '}';
    }

 

}
