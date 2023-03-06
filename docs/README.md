# API Reference

## Requirements

Send request with **API Prefix**: `/api/v1/*`

Send a request to Server, need to send request with headers below

```json
{
  "Accept": "application/json",
  "X-Requested-With": "XMLHttpRequest",
  "Accept-Language": "en",
  "Authorization": "Bearer {TOKEN}"
}
```

## Register

| method | params format | API         |
| ------ | ------------- | ----------- |
| `POST` | `JSON`        | `/register` |

```typescript
interface Request {
  email: string;
  name: string;
  password: string;
  password_confirmation: string;
}
```

```typescript
interface Response {
  id?: number;
  name?: string;
  user_id?: string;
  email?: string;
  join_date?: string;
  phone_number?: string;
  status?: string;
  role_name?: string;
  avatar?: string;
  position?: string;
  department?: string;
  email_verified_at?: string;
  created_at?: string;
  updated_at?: string;
}
```

---

## Login

| method | params format | API      |
| ------ | ------------- | -------- |
| `POST` | `JSON`        | `/login` |

```typescript
interface Request {
  email: string;
  password: string;
}
```

```typescript
interface Response {
  id?: number;
  name?: string;
  user_id?: string;
  email?: string;
  join_date?: string;
  phone_number?: string;
  status?: string;
  role_name?: string;
  avatar?: string;
  position?: string;
  department?: string;
  email_verified_at?: string;
  created_at?: string;
  updated_at?: string;
}
```

---

## Logout

| method | params format | API       |
| ------ | ------------- | --------- |
| `POST` | `JSON`        | `/logout` |

Post a request with `header`: `Authorization Bearer Token`

See: <a href='## Requirement'>Requirement</a>

---

## Department

### Create a department

| method | params format | API           |
| ------ | ------------- | ------------- |
| `POST` | `JSON`        | `/department` |

### Update a department

| method  | params format | API           |
| ------- | ------------- | ------------- |
| `PATCH` | `JSON`        | `/department` |

```ts
interface Request {
  department: string;
}
```

---

## Employee

### Create an employee

| method | params format | API         |
| ------ | ------------- | ----------- |
| `POST` | `JSON`        | `/employee` |

### Update an employee

| method  | params format | API         |
| ------- | ------------- | ----------- |
| `PATCH` | `JSON`        | `/employee` |

```ts
interface Request {
  name: string;
  email: string;
  birth_date: string;
  gender: string;
}
```

### Get info employee

| method | params format | API         |
| ------ | ------------- | ----------- |
| `GET`  | `JSON`        | `/employee` |

```ts
interface Response {
  name: string;
  email: string;
  birth_date: string;
  gender: string;
  employee_id: string;
}
```

---

## Jobs

### Create a Job

| method | params format | API    |
| ------ | ------------- | ------ |
| `POST` | `JSON`        | `/job` |

```ts
interface Request {
  job_title: string;
  department: string;
  job_location: string;
  no_of_vacancies: string;
  experience: string;
  age: number;
  salary_from: string;
  salary_to: string;
  job_type: string;
  status: string;
  start_date: string;
  expired_date: string;
  description: string;
  count: number;
}
```
