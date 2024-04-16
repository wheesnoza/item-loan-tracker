# What This Application Does

The purpose of this application is to manage the lending of loaned items between the organization and its employees.

# What Problems Will Be Solved

The application reduces communication costs due to information not being updated or becoming outdated with analog management methods or sheet management, keeps loaned items up-to-date and stress-free for employees, and enables the company to keep track of who borrowed what items, when, and for what purpose.

# User Requirements

The main users of this application are "employees" belonging to the organization and "corporate" entities responsible for managing the organization's loaned items. Let's organize the user requirements for employees and corporate separately.

## Employees

### Current Issues

1. Employees require direct communication with the corporate for loaned items, leading to delays in reading messages or discerning between pending and resolved issues.

2. Remote employees need to physically collect loaned items such as books or keyboards.

### Employee Requirements to Solve the Issues

1. Employees should be able to request loaned items through the application without direct communication with the corporate.

2. For remote employees, items should be mailed to their homes instead of requiring in-person collection.

3. When returning items, employees should be able to send them back to the company via mail.

4. To facilitate returns, employees should be able to expense return shipments without using personal funds.

5. To achieve item return via mail, the process should be visualized within the application, allowing tracking of statuses such as in transit or delivered.

## Corporate

### Current Issues

1. Management of loaned items using spreadsheets leads to missed updates and outdated information, resulting in communication costs.

2. Corporate lacks visibility into who currently possesses specific items, when they were borrowed, and for what purpose.

3. Managing messages leads to difficulty distinguishing between unresolved and resolved issues.

### Corporate Requirements to Solve the Issues

1. By centralizing item management within the application, corporate can ensure loaned items are consistently updated.

2. Corporate aims to visualize item requests made by employees and manage loaned item responses through request lists and other means.

# Definition Of Features

Identify the functionalities deemed necessary based on user requirements. Details of each functionality are consolidated in separate documents.

## Items

1. Item list

2. Item details

3. Create item

4. Edit item

5. Delete item

6. [Increase item stock quantity](./Item/features/increase_item_stock_quantity.md)

7. Decrease item stock quantity

## Item Requests

1. Create item request

2. Edit item request

3. Delete item request

4. List of item requests

5. Item request details

6. Progress and status management of requests
