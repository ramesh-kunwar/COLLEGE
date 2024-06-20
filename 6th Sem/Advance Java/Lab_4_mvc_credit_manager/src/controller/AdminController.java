/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controller;

import dao.impl.AdminDAOImpl;
import dao.AdminDAO;

/**
 *
 * @author rameshkunwar
 */
public class AdminController {

    // controller attribute
    public String username;
    public String password;

    public boolean doLogin(AdminController ac) {
        boolean status = false;

        AdminDAO ad = new AdminDAOImpl();

        if (ad.equals(ad)) {
            status = true;
        }

        return status;
    }

}
