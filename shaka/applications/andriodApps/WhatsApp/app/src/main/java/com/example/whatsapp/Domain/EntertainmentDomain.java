package com.example.whatsapp.Domain;

public class EntertainmentDomain {
    private int videoThumbNail;
    private String videoText;
    private int rounded_profile;
    private String videoComment;

    public EntertainmentDomain(int videoThumbNail, String videoText, int rounded_profile, String videoComment) {
        this.videoThumbNail = videoThumbNail;
        this.videoText = videoText;
        this.rounded_profile = rounded_profile;
        this.videoComment = videoComment;
    }


    public void setVideoThumbNail(int videoThumbNail) {
        this.videoThumbNail = videoThumbNail;
    }

    public void setVideoText(String videoText) {
        this.videoText = videoText;
    }

    public void setRounded_profile(int rounded_profile) {
        this.rounded_profile = rounded_profile;
    }

    public void setVideoComment(String videoComment) {
        this.videoComment = videoComment;
    }

    public int getVideoThumbNail() {
        return videoThumbNail;
    }

    public String getVideoText() {
        return videoText;
    }

    public int getRounded_profile() {
        return rounded_profile;
    }

    public String getVideoComment() {
        return videoComment;
    }



}
