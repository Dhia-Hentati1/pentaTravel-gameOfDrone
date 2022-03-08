package entities;

public class Etablissement {

    private int ide;
    private int id_prop;
    private int numero;
    private String type;
    private String nom;
    private String adresse;
    private String description;
    private String avis;

    public Etablissement(int id_prop, int numero, String type, String nom, String adresse, String description, String avis) {
        this.id_prop = id_prop;
        this.numero = numero;
        this.type = type;
        this.nom = nom;
        this.adresse = adresse;
        this.description = description;
        this.avis = avis;
    }

    public Etablissement(int ide) {
        this.ide = ide;
    }

    public Etablissement(int ide, int id_prop, int numero, String type, String nom, String adresse, String description, String avis) {
        this.ide = ide;
        this.id_prop = id_prop;
        this.numero = numero;
        this.type = type;
        this.nom = nom;
        this.adresse = adresse;
        this.description = description;
        this.avis = avis;
    }

    public int getIde() {
        return ide;
    }

    public void setIde(int ide) {
        this.ide = ide;
    }

    public int getId_prop() {
        return id_prop;
    }

    public void setId_prop(int id_prop) {
        this.id_prop = id_prop;
    }

    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getAvis() {
        return avis;
    }

    public void setAvis(String avis) {
        this.avis = avis;
    }
   
    @Override
    public String toString() {
        return "Etablissement{" + "ide=" + ide + ", id_prop=" + id_prop + ", numero=" + numero + ", type=" + type + ", nom=" + nom + ", adresse=" + adresse + ", description=" + description + ", avis=" + avis + '}';
    }

   // public int getIde() {
    //    throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    //}

}
