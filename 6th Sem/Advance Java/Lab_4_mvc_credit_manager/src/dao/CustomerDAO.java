/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Interface.java to edit this template
 */
package dao;

import java.sql.ResultSet;
import controller.CustomerController;

/**
 *
 * @author rameshkunwar
 */
public interface CustomerDAO {

    /**
     * this method will store teh data of customer
     *
     * @param cc
     * @return
     */
    public abstract boolean createCustomer(CustomerController cc);

    public abstract ResultSet selectCustomer(CustomerController cc);

    public abstract boolean updateCustomer(CustomerController cc);

    public abstract ResultSet selectCustomerById(CustomerController cc);

    public abstract boolean deleteCustomer(CustomerController cc);

}
