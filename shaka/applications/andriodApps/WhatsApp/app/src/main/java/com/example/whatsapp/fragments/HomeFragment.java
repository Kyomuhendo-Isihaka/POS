package com.example.whatsapp.fragments;

import android.annotation.SuppressLint;
import android.os.Bundle;

import androidx.fragment.app.Fragment;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import com.example.whatsapp.R;

import java.util.ArrayList;

public class HomeFragment extends Fragment {
     private ListView homeListView;
     private ArrayAdapter homeAdapter;

     private String homeData[]={"hello","how","are","you"};


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_home, container, false);

        homeListView = view.findViewById(R.id.homeListView);
        homeAdapter = new ArrayAdapter(getActivity(), androidx.appcompat.R.layout.support_simple_spinner_dropdown_item, homeData);
        homeListView.setAdapter(homeAdapter);
        return view;
    }
}