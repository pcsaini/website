package com.example.radhepc.library;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;
import android.widget.Toast;

public class Create extends AppCompatActivity implements View.OnClickListener {

    EditText name,emailid,dob,mobno,useid,pass;
    String gender=null;
    DbHelper helper;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_create);
        helper= new DbHelper(this);
        Toolbar tb = (Toolbar)findViewById(R.id.toolbar);
        setSupportActionBar(tb);

        name= (EditText) findViewById(R.id.name);
        emailid= (EditText) findViewById(R.id.gmail);
        dob= (EditText) findViewById(R.id.editText);
        useid= (EditText) findViewById(R.id.username_create);
        mobno= (EditText) findViewById(R.id.number);
        pass= (EditText) findViewById(R.id.createpassword);
        RadioButton btn= (RadioButton) findViewById(R.id.male);
        RadioButton femaleBtn= (RadioButton) findViewById(R.id.female);

        gender=(btn.isChecked())?"male":"female";



        getSupportActionBar().setHomeButtonEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        Button submit = (Button) findViewById(R.id.createbutton);
        submit.setOnClickListener(this);



    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_create, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_exit) {
            finish();
        }
        if(id==android.R.id.home){
            startActivity(new Intent(Create.this,MainActivity.class));
        }

        return super.onOptionsItemSelected(item);
    }

    @Override
    public void onClick(View view) {
       boolean isRegistered= helper.Register(new User(useid.getText().toString(),
                name.getText().toString(),
                pass.getText().toString(),
                emailid.getText().toString(),mobno.getText().toString(),
                gender,dob.getText().toString()));

        if(isRegistered){
            Bundle bundle= new Bundle();
            bundle.putString("id", useid.getText().toString());
            Intent intent= new Intent(this,Home.class);
            intent.putExtras(bundle);
            intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TASK);
            startActivity(intent);
        }else
        Toast.makeText(this,"Cannot Register !!!!!",Toast.LENGTH_LONG).show();

    }
}
