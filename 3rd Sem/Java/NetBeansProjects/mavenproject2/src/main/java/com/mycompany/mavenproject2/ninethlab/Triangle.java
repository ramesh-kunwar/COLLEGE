/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.mavenproject2.ninethlab;

/**
 *
 * @author rameshkunwar
 */
public class Triangle extends Shape {

    public double a;
    public double b;
    public double base;
    public double height;

    public double areaOfTriangle() {
        this.area = 0.5 * this.base * this.height;
        return this.area;
    }

    public double perimeterOfTriangle() {
        this.perimeter = this.base + this.a + this.b;
        return this.perimeter;
    }
}
