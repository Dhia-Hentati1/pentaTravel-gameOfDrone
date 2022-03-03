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
public class Client {
    private int idc;
    private String nom;
    private String cin;
    private String telephone;
    
    public Client(){
        super();
    }

    public Client(int idc, String nom, String cin, String telephone) {
        this.idc = idc;
        this.nom = nom;
        this.cin = cin;
        this.telephone = telephone;
    }

    public int getIdc() {
        return idc;
    }

    public void setIdc(int idc) {
        this.idc = idc;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
    }

    public String getTelephone() {
        return telephone;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }
   
}
