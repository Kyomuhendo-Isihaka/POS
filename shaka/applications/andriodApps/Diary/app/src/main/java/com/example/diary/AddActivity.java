package com.example.diary;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class AddActivity extends AppCompatActivity {
    EditText activityTitle, activityDescription;
    Button addBtn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add);

        activityTitle = findViewById(R.id.activityTitle);
        activityDescription = findViewById(R.id.activityDescription);
        addBtn = findViewById(R.id.addBtn);
        addBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                DbHelper dbHelper = new DbHelper(AddActivity.this);
                dbHelper.addActivity(activityTitle.getText().toString().trim(), activityDescription.getText().toString().trim());
            }
        });
    }
}