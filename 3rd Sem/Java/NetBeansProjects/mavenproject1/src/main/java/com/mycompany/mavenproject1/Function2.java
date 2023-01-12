/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.mavenproject1;

/**
 *
 * @author rameshkunwar
 */
public class Function2 {

    public String getUserName() {
        String name = "ramesh";
        return name;
    }

    public String getPassword() {
        return "root";
    }

    public boolean userExist() {
        String name = getUserName();
        String pass = getPassword();
        if (name == "ramesh" && pass == "root") {
            return true;
        } else {
            return false;
        }
    }

    public void display() {
        boolean authorized = userExist();
        if (authorized) {
            System.out.println("Welcome to the dashboard");
        } else {
            System.out.println("You can't access the dashboard");
        }
    }

    public static void main(String[] args) {
        Function2 funcExample = new Function2();
        funcExample.display();
    }
}
