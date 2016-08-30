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
import android.widget.TextView;
import android.widget.Toast;

public class Login extends AppCompatActivity implements View.OnClickListener {

    EditText userid,pass;
    DbHelper helper;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        Toolbar tb = (Toolbar)findViewById(R.id.toolbar);
        setSupportActionBar(tb);
        userid= (EditText) findViewById(R.id.username);
        pass= (EditText) findViewById(R.id.password);
        helper= new DbHelper(this);
        getSupportActionBar().setHomeButtonEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);


        TextView tv = (TextView) findViewById(R.id.create1);
        tv.setOnClickListener(this);


        Button submit = (Button) findViewById(R.id.loginbutton);
        submit.setOnClickListener(this);



    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_login, menu);
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
            startActivity(new Intent(Login.this,MainActivity.class));
        }

        return super.onOptionsItemSelected(item);
    }

    @Override
    public void onClick(View view) {
        if (view.getId()==R.id.create1)
        {
            startActivity(new Intent(Login.this,Create.class));
        }
        if (view.getId()==R.id.loginbutton)
        {
          boolean loggedIN= helper.Authenticate(userid.getText().toString(),pass.getText().toString());
            if(loggedIN)
            {
                Bundle bundle= new Bundle();
                bundle.putString("id", userid.getText().toString());
                Intent intent= new Intent(this,Home.class);
                intent.putExtras(bundle);
                startActivity(intent);
                finish();
            }else
            Toast.makeText(this,"Error !!!!" ,Toast.LENGTH_LONG).show();
        }
    }
}
