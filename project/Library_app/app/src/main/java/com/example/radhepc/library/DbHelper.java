package com.example.radhepc.library;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

/**
 * Created by RadhePC on 16-11-2015.
 */
public class DbHelper extends SQLiteOpenHelper {
    public DbHelper(Context context) {
        super(context,"login", null, 1);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        sqLiteDatabase.execSQL("CREATE TABLE IF NOT EXISTS Record (USERID TEXT PRIMARY KEY , PASSWORD TEXT, " +
                "NAME TEXT ," +
                "EMAILID TEXT ,"+
                "MOBILENO TEXT ,"+
                "GENDER TEXT ,"+
                "DOB TEXT"+
                ")");
        Log.e("Table Created !!!", "");

    }

    public boolean Authenticate(String userid,String pass){
        SQLiteDatabase db= getReadableDatabase();
        boolean hasNext=true;
        boolean authenticated=false;
        Cursor cursor= db.query("Record",new String[]{"USERID","PASSWORD","NAME","EMAILID","MOBILENO" ,
                "GENDER"},"USERID = ? AND PASSWORD = ?", new String[]{ userid,pass},null,null,null);
        Log.e("user count with id" + userid, " " + cursor.getCount());
        if(cursor.getCount()>0)
            authenticated= true;

        return authenticated;
    }

    public User getUserDetails(String id){
        SQLiteDatabase db= getReadableDatabase();
        boolean hasNext=true;
        boolean authenticated=false;
        User user=null;
        Cursor cursor= db.query("Record",new String[]{"USERID","PASSWORD","NAME","EMAILID","MOBILENO" ,"DOB",
                "GENDER"},"USERID = ?", new String[]{ id},null,null,null);
        Log.e("user count with id"+id," "+cursor.getCount());
        cursor.moveToFirst();
        if(cursor.getCount()>0){
            //String userId,String Name,String PASS,String emailId,String mobile,String gender,String DOB)
             user = new User(cursor.getString(cursor.getColumnIndex("USERID")),
                    cursor.getString(cursor.getColumnIndex("NAME")),
                    cursor.getString(cursor.getColumnIndex("PASSWORD")),
                    cursor.getString(cursor.getColumnIndex("EMAILID")),
                    cursor.getString(cursor.getColumnIndex("MOBILENO")),
                    cursor.getString(cursor.getColumnIndex("GENDER")),
                    cursor.getString(cursor.getColumnIndex("DOB")));

        }
        return user;
    }

    public boolean Register(User user){
        SQLiteDatabase database= getReadableDatabase();
        ContentValues contentValues= new ContentValues();
        contentValues.put("USERID",user.UserId);
        contentValues.put("NAME",user.Name);
        contentValues.put("PASSWORD",user.PASS);
        contentValues.put("EMAILID",user.EmailId);
        contentValues.put("MOBILENO",user.Mobile);
        contentValues.put("GENDER", user.Gender);
        contentValues.put("DOB",user.DOB);
        long id= database.insert("Record",null,contentValues);
        Log.e("registered "," id "+id);

        if(id!=-1)return true;

        return false;

    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }
}
