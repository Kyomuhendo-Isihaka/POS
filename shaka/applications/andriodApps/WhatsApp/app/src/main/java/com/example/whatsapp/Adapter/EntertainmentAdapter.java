package com.example.whatsapp.Adapter;


import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import com.example.whatsapp.R;

public class EntertainmentAdapter extends BaseAdapter {

    private int videoThumbnail[];
    private String videoText[];
    private String videoComment[];
    private int rounded_profile[];
    private Context context;


    public EntertainmentAdapter(Context context, int videoThumb_nail[], String videoText[], String videoComment[], int rounded_profile[]){
        this.videoThumbnail= videoThumb_nail;
        this.videoText= videoText;
        this.rounded_profile = rounded_profile;
        this.videoComment = videoComment;
        this.context = context;

    }

    @Override
    public int getCount() {
        return this.rounded_profile.length;
    }

    @Override
    public Object getItem(int i) {
        return null;
    }

    @Override
    public long getItemId(int i) {
        return 0;
    }

    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        TextView videoText, videoComment;
        ImageView videoThumb, rounded_profile;
        View layoutInflater = LayoutInflater.from(context).inflate(R.layout.item_entertinment, null, false);

        videoText=layoutInflater.findViewById(R.id.videoText);
        videoComment=layoutInflater.findViewById(R.id.videoText);
        rounded_profile=layoutInflater.findViewById(R.id.rounded_profile);
        videoThumb=layoutInflater.findViewById(R.id.videoThumbNail);

        videoText.setText(this.videoText[i]);
        videoThumb.setImageResource(this.videoThumbnail[i]);
        videoComment.setText(this.videoComment[i]);
        rounded_profile.setImageResource(this.rounded_profile[i]);


        return layoutInflater;
    }




}
