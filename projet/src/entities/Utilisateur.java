/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author thebejaoui
 */
public class Utilisateur {
    
    private int id_prop ;
        private String nom;
   private String prenom;
   private String datedenaissance;
   private String  role;
   private String  login;
   private String mdp;

    public Utilisateur(int id_prop , String nom, String prenom, String datedenaissance, String role, String login, String mdp) {
        this.id_prop  = id_prop ;
        this.nom = nom;
        this.prenom = prenom;
        this.datedenaissance = datedenaissance;
        this.role = role;
        this.login = login;
        this.mdp = mdp;
    }

    public Utilisateur(String nom, String prenom, String datedenaissance, String role, String login, String mdp) {
        this.nom = nom;
        this.prenom = prenom;
        this.datedenaissance = datedenaissance;
        this.role = role;
        this.login = login;
        this.mdp = mdp;
    }

    public Utilisateur(int id_prop ) {
        this.id_prop  = id_prop ;
    }

    public Utilisateur(int aInt, String string, String string0, String string1, String string2, String string3, String string4, boolean add) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public Utilisateur(int aInt, String string, String string0) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public int getIdu() {
        return id_prop ;
    }

    public void setIdu(int idu) {
        this.id_prop  = idu;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getDatedenaissance() {
        return datedenaissance;
    }

    public void setDatedenaissance(String datedenaissance) {
        this.datedenaissance = datedenaissance;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public String getLogin() {
        return login;
    }

    public void setLogin(String login) {
        this.login = login;
    }

    public String getMdp() {
        return mdp;
    }

    public void setMdp(String mdp) {
        this.mdp = mdp;
    }

    @Override
    public String toString() {
        return "Utilisateur{" + "idu=" + id_prop  + ", nom=" + nom + ", prenom=" + prenom + ", datedenaissance=" + datedenaissance + ", role=" + role + ", login=" + login + ", mdp=" + mdp + '}';
    }
   
    
}
