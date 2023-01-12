/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.mavenproject2.ninethlab;

/**
 *
 * @author rameshkunwar
 */
public class Rectangle extends Shape {

    public double length;
    public double breadth;

    public double calculateArea() {
        System.out.println(this.area);
        this.area = this.length * this.breadth;
        System.out.println(this.area);
        return this.area;
    }

    public double perimeter() {
        this.perimeter = 2 * (this.length + this.breadth);
        return this.perimeter;
    }

}
