# Dice Game PHP

This is a simple PHP-based dice game where the player bets on the outcome of two dice rolls. The player can choose from three betting options: Below 7, Exactly 7, or Above 7. The game tracks the player's wallet balance, deducts bet amounts, and rewards the player based on the game outcome.

## Features
- **Game Types:**
    - **Below 7**: Bet that the total of two dice rolls will be less than 7.
    - **Exactly 7**: Bet that the total of two dice rolls will be exactly 7.
    - **Above 7**: Bet that the total of two dice rolls will be greater than 7.

- **Wallet Balance:** The game keeps track of the player's wallet balance, which starts at 100. Each round, a fixed bet amount (10) is deducted, and the player earns rewards based on their bet type.

- **Game Restart:** The game can either be reset to start a new round or continue the current session based on the player's actions.

## How It Works
1. **Game Start**: When the user visits the page, they are presented with three betting options:
    - Below 7
    - Exactly 7
    - Above 7

2. **Dice Rolls**: After selecting a bet, two dice are rolled with values between 1 and 7 (inclusive). The total of both dice is calculated.

3. **Win/Loss Determination**: The game checks if the total of the dice matches the selected bet type:
    - If the player selected **Below 7**, and the dice total is less than 7, they win.
    - If the player selected **Exactly 7**, and the dice total is exactly 7, they win.
    - If the player selected **Above 7**, and the dice total is greater than 7, they win.

4. **Reward System**: If the player wins, they receive a reward based on the bet type:
    - **Below 7**: Win 20 units
    - **Exactly 7**: Win 30 units
    - **Above 7**: Win 20 units

5. **Wallet Update**: The player's wallet balance is updated after each round, deducting the bet amount and adding the reward (if applicable).

6. **Game Continuation**: The player can choose to reset the game or continue playing, keeping the current balance.

## File Structure
- **index.php**: The main PHP file containing the game logic and user interface.

## Requirements
- A PHP server (e.g., Apache with PHP installed) to run the game.
- A web browser to play the game.

## Installation

1. Clone or download this repository.
2. Place the `index.php` file in the root directory of your web server.
3. Ensure your PHP environment is correctly set up.
4. Access the game by visiting `http://localhost/index.php` in your browser.

## Example Usage

When you load the page, you'll see three buttons for different betting options:

- **Below 7**
- **Exactly 7**
- **Above 7**

After selecting a betting option, the game will roll the dice and display the results. If you win, your balance will increase; if you lose, your balance will decrease.

You can reset or continue playing by clicking the respective links.

---

### Notes:
- The wallet balance is stored in the user's session, so the game will keep track of the balance across multiple rounds.
- To reset the game, click **Reset and play again**, which sets the wallet balance to 100.
- To continue playing, click **Continue playing**, which keeps the current wallet balance intact.

