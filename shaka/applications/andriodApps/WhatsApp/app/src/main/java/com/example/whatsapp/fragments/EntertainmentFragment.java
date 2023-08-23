package com.example.whatsapp.fragments;

import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Adapter;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import com.example.whatsapp.Adapter.EntertainmentAdapter;
import com.example.whatsapp.Domain.EntertainmentDomain;
import com.example.whatsapp.R;

import java.util.ArrayList;
import java.util.List;


public class EntertainmentFragment extends Fragment {

    private EntertainmentAdapter entertainmentAdapter;

    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {;




        View view = inflater.inflate(R.layout.fragment_entertainment, container, false);
        ListView listView = view.findViewById(R.id.entertainmentListView);
        int videoThumbnail[]= {R.drawable.person, R.drawable.home_icon, R.drawable.pic1};
        int rounded_profile[] = {R.drawable.arrow_downward,R.drawable.person,R.drawable.home_icon};
        String videtext[] = {"hdhdhdh","shsjdhjsd","sdhjhds"};
        String  comment[] = {"hdhdhdh","shsjdhjsd","sdhjhds"};

        entertainmentAdapter = new EntertainmentAdapter(getContext(), videoThumbnail,videtext,comment,rounded_profile);

        listView.setAdapter(entertainmentAdapter);

        return view;
    }




}



