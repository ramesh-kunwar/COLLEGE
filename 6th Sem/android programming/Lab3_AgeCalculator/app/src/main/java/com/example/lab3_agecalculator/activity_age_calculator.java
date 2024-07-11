package com.example.lab3_agecalculator;

import android.app.DatePickerDialog;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.cardview.widget.CardView;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import org.joda.time.Period;
import org.joda.time.PeriodType;

import java.text.SimpleDateFormat;
import java.util.Calendar;


public class activity_age_calculator extends AppCompatActivity {

    private CardView fromDataBtn, toDateBtn;
    private Button calculateBtn;
    private TextView birthTv, todayTv;
    private  TextView yearTv , monthTv, dayTv;

    DatePickerDialog.OnDateSetListener dateSetListenerFromDate, getDateSetListenerToDate;

    String birthDateLocal = "";
    String todayDateLocal = "";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_age_calculator);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });


        fromDataBtn = findViewById(R.id.formAgeBtn);
        toDateBtn = findViewById(R.id.toAgeBtn);

        calculateBtn = findViewById(R.id.calculateBtn);
        birthTv = findViewById(R.id.birthTv);
        todayTv = findViewById(R.id.todayTv);
        yearTv = findViewById(R.id.yearTv);
        monthTv = findViewById(R.id.monthTv);
        dayTv = findViewById(R.id.dayTv);


        Calendar calendar = Calendar.getInstance();
        int year = calendar.get(Calendar.YEAR);
        int month = calendar.get(Calendar.MONTH);
        int day = calendar.get(Calendar.DAY_OF_MONTH);

        SimpleDateFormat simpleDateFormat = new SimpleDateFormat("dd/MM/YYYY");
        String todayDate = simpleDateFormat.format(calendar.getTime());
        birthTv.setText(todayDate);
        todayTv.setText(todayDate);


        birthDateLocal = todayDate;
        todayDateLocal = todayDate;


        setupBirthDateCalendar(year, month, day);

        setupTodayDateCalendar(year, month, day);




    }

    private void setupTodayDateCalendar(int year, int month, int day ){

        toDateBtn.setOnClickListener(new View.OnClickListener(){

            @Override
            public void onClick(View view) {

                DatePickerDialog datePickerDialog = new DatePickerDialog(
                        activity_age_calculator.this,

                        (datePicker, selectedYear, selectedMonth, selectedDay) -> {
                            selectedMonth = selectedMonth + 1;
                            String todayDate = selectedDay + "/" + selectedMonth + "/" + selectedDay ;
                            todayTv.setText(todayDate);
                            todayDateLocal = todayDate;
                            


                        },


//
//                        getDateSetListenerToDate,


                        year, month, day
                );
                datePickerDialog.show();
            }
        });

    }

    private void setupBirthDateCalendar(int year, int month, int day ){

        fromDataBtn.setOnClickListener(new View.OnClickListener(){

            @Override
            public void onClick(View view) {
                DatePickerDialog datePickerDialog = new DatePickerDialog(
                        activity_age_calculator.this,
                        dateSetListenerFromDate,
                        year, month, day
                );

                datePickerDialog.show();

            }


        });

        dateSetListenerFromDate = new DatePickerDialog.OnDateSetListener() {
            @Override
            public void onDateSet(DatePicker datePicker, int selectedyear, int selectedMonth, int selectedDay) {
                selectedMonth = selectedMonth + 1;
                String birthDate = selectedDay + "/" + selectedMonth + "/" + selectedDay;
                birthTv.setText(birthDate);
                birthDateLocal = birthDate;

            }
        };

    }
}