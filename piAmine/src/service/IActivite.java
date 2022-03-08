/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entities.Reglement;
import java.sql.SQLException;
import java.util.List;
/**
 *
 * @author thebejaoui
 */
public interface IActivite <T>{
    public void ajouter(T t) throws SQLException;
    public void supprimer(T t) throws SQLException;
    public void modifier(T t) throws SQLException;
    public List<T> afficher() throws SQLException;
      public List<T> triedate() throws SQLException;
       public List<T> rechrcherlib(String libele) throws SQLException;
       public List<T> rechrcheridavis(int idavis) throws SQLException;
     public void aff(T t) throws SQLException;
     public void rechnom(String nom) throws SQLException;
     public List<Reglement>  etatdecaissejou(String dateoperation) throws SQLException;
      public void  etatecheancier(String echeancier) throws SQLException;
      
    
    
}
