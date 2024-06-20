/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Interface.java to edit this template
 */
package dao;

import controller.AdminController;

/**
 *
 * @author rameshkunwar
 */
public interface AdminDAO {
    /**
     * 
     * @param ac
     * @return 
     */
    public abstract boolean login(AdminController ac);
    
}
