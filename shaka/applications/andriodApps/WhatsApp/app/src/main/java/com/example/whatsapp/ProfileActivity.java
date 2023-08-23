package com.example.whatsapp;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class ProfileActivity extends AppCompatActivity {
    private TextView profileEmail, profilePassword;

    @SuppressLint("MissingInflatedId")
    protected void onCreate(Bundle saveInstanceState){
        super.onCreate(saveInstanceState);
        setContentView(R.layout.activity_profile);
        Intent intent =getIntent();

        String userEmail = intent.getStringExtra("email");
        String userPassword = intent.getStringExtra("password");

        profileEmail=findViewById(R.id.profileEmail);
        profilePassword = findViewById(R.id.profilePassword);

        profileEmail.setText(userEmail);
        profilePassword.setText(userPassword);

    }
}
