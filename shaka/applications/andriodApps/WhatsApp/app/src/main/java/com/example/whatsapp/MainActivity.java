package com.example.whatsapp;

import android.annotation.SuppressLint;
import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;

import com.example.whatsapp.fragments.EntertainmentFragment;
import com.example.whatsapp.fragments.HomeFragment;
import com.example.whatsapp.fragments.ProfileFragment;
import com.example.whatsapp.fragments.SettingsFragment;
import com.google.android.material.bottomnavigation.BottomNavigationView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        if (savedInstanceState == null) {
           loadFragment(new HomeFragment());
        }

        BottomNavigationView bottomNavView;
        bottomNavView=findViewById(R.id.bottomNavView);
        bottomNavView.setOnItemSelectedListener(item -> {
            int itemId = item.getItemId();
            if(itemId==R.id.home){
                loadFragment(new HomeFragment());
                return true;
            }else if(itemId==R.id.entertainment){
                loadFragment(new EntertainmentFragment());
                return true;
            }else if(itemId==R.id.profile){
                loadFragment(new ProfileFragment());
                return true;
            }else if(itemId==R.id.menu_settings){
                loadFragment(new SettingsFragment());
                return true;
            } else if (itemId==R.id.main_menu) {
                loadFragment(new HomeFragment());
                return true;

            }

            return false;
        });


    }
    private void loadFragment(Fragment fragment) {
        getSupportFragmentManager()
                .beginTransaction()
                .replace(R.id.frame_layout, fragment)
                .commit();
    }
}
