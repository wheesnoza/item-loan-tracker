# What Is This Document

A document that summarizes the entities that appear in the application.

# Application Entities

- [User]() - Users who can operate the application
- [Item](./Item/overview.md) - Items owned by the organization
	- [Stock]() - Items stock
	- [Loan]() - Loeaned Items
- [Request]() - Request for items
	- [RequestedItem]() - Items requested per one request
	- [State]() - Request state history
- [Notification]() - Notices to be displayed to users 
	- [SeenNotification]() - Notice seen by users.

# ER Diagram

## Conceptual Model

```mermaid
erDiagram
  User ||--o{ Loan : "1 user has 0 or more loans"
  User ||--o{ Request : "1 user has 0 or more requests"
  Stock ||--o| Loan : "1 stock has 0 or 1 loan"
  
	Request }|--|{ Item : "1 or more requests has 1 or more items"

  Item ||--|{ Stock : "1 item has 1 or more stocks"
  Request ||--|{ State : "1 request has 1 or more states"
  User }|--o{ Notification : "1 or more users has 0 or more notifications"
```

## Logic Model
```mermaid
erDiagram
	User {
		int id
		string firstname
		string lastname
		string email
		string password
	}
	Item {
		int id
		string name
		string description
		int category
	}
	Stock {
		int id
		int item_id
		string item_code
	}
	Loan {
		int id
		int stock_id
		int user_id
	}
	Request {
		int id
		int user_id
		string reason
	}
	RequestedItem {
		int id
		request_id
		item_id
	}
	State {
		int id
		int request_id
		int value
		string transition_reason
	}
	Notification {
		int id
		string title
		string content
		int category
	}
	SeenNotification {
		int id
		int notification_id
		int user_id
	}
  User ||--o{ Loan : "0 or more"
  User ||--o{ Request : "0 or more"
  Stock ||--o| Loan : "0 or 1"
  Request ||--|{ RequestedItem : "1 or more"
  Item ||--|{ RequestedItem : "1 or more"
  Item ||--|{ Stock : "1 or more"
  Request ||--|{ State : "1 or more"
  Notification ||--o{ SeenNotification : "0 or more"
  User ||--o{ SeenNotification : "0 or more"
```

## Physical Model
```mermaid
erDiagram
	User {
		BIGINT id PK
		VARCHAR firstname
		VARCHAR lastname
		VARCHAR email
		VARCHAR password
	}
	Item {
		BIGINT id PK
		VARCHAR name
		VARCHAR description
		UNSIGNED_TINY_INTEGER category
	}
	Stock {
		BIGINT id PK
		BIGINT item_id FK
		VARCHAR(8) item_code
	}
	Loan {
		BIGINT id PK
		BIGINT stock_id FK
		BIGINT user_id FK
	}
	Request {
		BIGINT id PK
		BIGINT user_id FK
		VARCHAR reason
	}
	RequestedItem {
		BIGINT id PK
		BIGINT request_id FK
		BIGINT item_id FK
	}
	State {
		BIGINT id PK
		BIGINT request_id FK
		UNSIGNED_TINY_INTEGER value
		VARCHAR transition_reason
	}
	Notification {
		BIGINT id
		VARCHAR title
		JSON content
		UNSIGNED_TINY_INTEGER category
	}
	SeenNotification {
		BIGINT id PK
		BIGINT notification_id FK
		BIGINT user_id FK
	}
  User ||--o{ Loan : "0 or more"
  User ||--o{ Request : "0 or more"
  Stock ||--o| Loan : "0 or 1"
  Request ||--|{ RequestedItem : "1 or more"
  Item ||--|{ RequestedItem : "1 or more"
  Item ||--|{ Stock : "1 or more"
  Request ||--|{ State : "1 or more"
  Notification ||--o{ SeenNotification : "0 or more"
  User ||--o{ SeenNotification : "0 or more"
```

# Database Definition

## users

| column | type | nullable | default |
| ------ | ---- | -------- | ------- |
| id | UNSIGNED BIGINT | | |
| firstname | VARCHAR | NULLABLE | |
| lastname | VARCHAR | NULLABLE | |
| email | VARCHAR | | |
| password | VARCHAR | NULLABLE | |
| created_at | TIMESTAMP | | |
| updated_at | TIMESTAMP | | |

## items

| column | type | nullable | default |
| ------ | ---- | -------- | ------- |
| id | UNSIGNED BIGINT | | |
| name | VARCHAR | | |
| description | VARCHAR | | |
| category | UNSIGNED TINY INTEGER | | |
| created_at | TIMESTAMP | | |
| updated_at | TIMESTAMP | | |