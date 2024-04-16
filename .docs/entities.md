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
  
	Request ||--|| Stock : "1 or more requests has 1 or more items"

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
		int request_id
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
  User ||--o{ Loan : "1 user has 0 or more loans"
  User ||--o{ Request : "1 user has 0 or more requests"
  Stock ||--o| Loan : "1 stock has 0 or 1 loan"
  Request ||--|| Stock : "1 request has 1 stock"
  Item ||--o{ Stock : "1 item has 0 or more stock"
  Request ||--|{ State : "1 request has 1 or more states"
  Notification ||--o{ SeenNotification : "1 notification has 0 or more seen notifications"
  User ||--o{ SeenNotification : "1 user has 0 or more seen notifications"
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
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
	Item {
		BIGINT id PK
		VARCHAR name
		VARCHAR description
		UNSIGNED_TINY_INTEGER category
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
	Stock {
		BIGINT id PK
		BIGINT item_id FK
		BIGINT request_id FK
		VARCHAR(8) item_code
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
	Loan {
		BIGINT id PK
		BIGINT stock_id FK
		BIGINT user_id FK
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
	Request {
		BIGINT id PK
		BIGINT user_id FK
		VARCHAR reason
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
	State {
		BIGINT id PK
		BIGINT request_id FK
		UNSIGNED_TINY_INTEGER value
		VARCHAR transition_reason
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
	Notification {
		BIGINT id
		VARCHAR title
		JSON content
		UNSIGNED_TINY_INTEGER category
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
	SeenNotification {
		BIGINT id PK
		BIGINT notification_id FK
		BIGINT user_id FK
		TIMESTAMP created_at
		TIMESTAMP updated_at
	}
  User ||--o{ Loan : "user has many loans"
  User ||--o{ Request : "user has many requests"
  Stock ||--o| Loan : "stock belongs to loan "
  Request ||--|| Stock : "request has one stock"
  Item ||--o{ Stock : "item has many stock"
  Request ||--|{ State : "request has many states"
  Notification ||--o{ SeenNotification : "notification has many seen notifications"
  User ||--o{ SeenNotification : "user has many seen notifications"
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