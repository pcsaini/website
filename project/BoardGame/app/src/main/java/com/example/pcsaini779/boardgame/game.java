package com.example.pcsaini779.boardgame;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.BaseAdapter;
import android.widget.GridLayout;
import android.widget.GridView;
import android.widget.Toast;

public class game extends AppCompatActivity {

    GridView grid;
    /*String[] web = {
            "Google",
            "Github",
            "Instagram",
            "Facebook",
            "Flickr",
            "Pinterest",
            "Quora",
            "Twitter",
            "Vimeo",
            "WordPress",
            "Youtube",
            "Stumbleupon",
            "SoundCloud",
            "Reddit",
            "Blogger"

    } ;*/
    int[] imageId = {
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg,
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg,
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg,
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg,
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg,
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg,
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg,
            R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg, R.drawable.cell_bg


    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_game);

        GridAdapter adapter = new GridAdapter(game.this, imageId);
        grid=(GridView)findViewById(R.id.grid);
        grid.setAdapter(adapter);
        grid.setOnItemClickListener(new AdapterView.OnItemClickListener() {

            @Override
            public void onItemClick(AdapterView<?> parent, View view,
                                    int position, long id) {
                Toast.makeText(game.this, "You Clicked at " +imageId[+ position], Toast.LENGTH_SHORT).show();

            }
        });

    }

}
