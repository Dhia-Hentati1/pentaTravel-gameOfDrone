/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author 21629
 */
public class Etat {

    private int ide;
    private int id_prop;
    private int numero;
    private int region;
    private int type;
    private int menu;
    private int quantite;
    private String description;
    private String adresse;

    public Etat() {
        super();
    }

    public Etat(int ide, int id_prop, int numero, int region, int type, int menu, int quantite, String description, String adresse) {
        this.ide = ide;
        this.id_prop = id_prop;
        this.numero = numero;
        this.region = region;
        this.type = type;
        this.menu = menu;
        this.quantite = quantite;
        this.description = description;
        this.adresse = adresse;
    }

    public Etat(int aInt, int aInt0, int aInt1, String string, String string0, String string1) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
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

    public int getRegion() {
        return region;
    }

    public void setRegion(int region) {
        this.region = region;
    }

    public int getType() {
        return type;
    }

    public void setType(int type) {
        this.type = type;
    }

    public int getMenu() {
        return menu;
    }

    public void setMenu(int menu) {
        this.menu = menu;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }
    
}
