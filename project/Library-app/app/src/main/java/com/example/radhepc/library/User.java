package com.example.radhepc.library;

import java.lang.ref.SoftReference;

/**
 * Created by RadhePC on 16-11-2015.
 */
public class User {
    public static String id;
    String Name;
    String EmailId;
    String Mobile;
    String UserId;
    String Gender;
    String PASS;
    String DOB;
    public User(String userId,String Name,String PASS,String emailId,String mobile,String gender,String DOB){
        this.Name=Name;
        this.EmailId=emailId;
        this.Mobile=mobile;
        this.UserId=userId;
        this.Gender=gender;
        this.PASS=PASS;
        this.DOB=DOB;
    }
}
