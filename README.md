# BSC Crypto Address Generator and Transaction Checker

This PHP script generates Binance Smart Chain (BSC) cryptocurrency addresses and checks whether they have any transactions associated with them. It utilizes the Ethereum PHP library for address generation and interacts with the BscScan API for transaction data.

## Features

- Generate BSC cryptocurrency addresses.
- Check whether generated addresses have any transactions.

## Requirements

- PHP (version 8.0 or higher)
- [Ethereum PHP library](https://github.com/kornrunner/php-ethereum)
- Access to the [BscScan API](https://bscscan.com/apis)

## Usage

1. Clone the repository:
git clone https://github.com/your_username/your_repository.git

3. Configure BscScan API key:

   - Obtain an API key from [BscScan API](https://bscscan.com/apis).
   - Update the `config.php` file with your API key:

   ```php
   <?php

   return [
       $api_key = "YOUR_BSCSCAN_API_KEY";
   ];
  
Run the script:
php run.php

##Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your improvements.
