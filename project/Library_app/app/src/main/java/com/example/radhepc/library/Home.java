package com.example.radhepc.library;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class Home extends AppCompatActivity implements View.OnClickListener {

    DbHelper helper;
    TextView details;
    User user;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        Toolbar tb = (Toolbar)findViewById(R.id.toolbar);
        setSupportActionBar(tb);
        helper= new DbHelper(this);
        if(getIntent().getExtras()!=null){
            String id= getIntent().getExtras().getString("id");
            User.id=id;
        }

        user=helper.getUserDetails(User.id);
        details= (TextView) findViewById(R.id.details);
        details.setText("Name :"+user.Name+"\nEmail id: "+user.EmailId+"\n");


        getSupportActionBar().setHomeButtonEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        Button issue = (Button) findViewById(R.id.issue);
        issue.setOnClickListener(this);
        Button sell = (Button) findViewById(R.id.sell);
        sell.setOnClickListener(this);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_home, menu);
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
            startActivity(new Intent(Home.this,MainActivity.class));
        }
        if (id==R.id.logout)
        {
            startActivity(new Intent(Home.this,MainActivity.class));
        }
        return super.onOptionsItemSelected(item);
    }


    @Override
    public void onClick(View view) {
        if (view.getId()==R.id.issue)
        {
            startActivity(new Intent(Home.this,Issue.class));
        }
        if (view.getId()==R.id.sell)
        {
            startActivity(new Intent(Home.this,Sell.class));
        }

    }
}

