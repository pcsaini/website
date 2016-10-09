package com.example.pcsaini779.dice;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.Random;

public class MainActivity extends AppCompatActivity {


    TextView txtUserScore, txtCoputerScore;
    ImageView imgDice;
    Button btnRoll, btnHold, btnReset;
    private Random random = new Random();
    private int userCurrentScore = 0;
    private int compCurrentScore = 0;
    boolean userTurn = true;
    private int diceIcons[] = {
            R.drawable.dice1, R.drawable.dice2, R.drawable.dice3,
            R.drawable.dice4, R.drawable.dice5, R.drawable.dice6
    };
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txtUserScore = (TextView) findViewById(R.id.userScore);
        txtCoputerScore = (TextView) findViewById(R.id.computerScore);
        imgDice = (ImageView) findViewById(R.id.diceImage);
        btnRoll = (Button) findViewById(R.id.btnRoll);
        btnHold = (Button) findViewById(R.id.btnHold);
        btnReset = (Button) findViewById(R.id.btnReset);

        btnRoll.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                rollDice();
            }
        });
        btnReset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                onStart();
            }
        });
        btnHold.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                holdMethod();
            }
        });
    }
    private void rollDice(){
        int num = random.nextInt(6) + 1;
        int currentScore = Integer.parseInt(txtUserScore.getText().toString());
        imgDice.setImageResource(diceIcons[num-1]);
        if(num ==1){
            currentScore -= userCurrentScore;
            txtUserScore.setText(currentScore + "");
            computerTurn();
        }else {
            currentScore += num;
            userCurrentScore += num;
            txtUserScore.setText(currentScore + "");
        }
    }
    protected void onStart() {
        super.onStart();
        userCurrentScore = 0;
        txtUserScore.setText("0");
        txtCoputerScore.setText("0");
        userTurn = true;
    }
    private void holdMethod(){
        userTurn = false;
        userCurrentScore = 0;
        compCurrentScore = 0;
        computerTurn();
    }
    private void computerTurn(){
        int num;
        do{
            num = random.nextInt(6) +1;
            imgDice.setImageResource(diceIcons[num-1]);
            if(num ==1){
                compCurrentScore =0;
                userTurn = true;
                break;
            }else{
                compCurrentScore +=num;
            }
        }while (random.nextInt(8)<6);
        compCurrentScore = Integer.parseInt(txtCoputerScore.getText().toString()) + compCurrentScore;
        txtCoputerScore.setText(""+compCurrentScore);
        compCurrentScore = 0;
    }
}
