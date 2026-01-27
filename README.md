# Church Follow‑Up Tracking System (v1)

A simple web‑based system to help church admins and ministry leaders track and complete follow‑ups after events or services.

## Screenshots

### People List (Primary Screen)
![People List](public/images/screenshots/v1-follow-up-list.png)

### Update Follow‑Up
![Edit Follow‑Up](public/images/screenshots/v1-edit-screen.png)

## Problem
Church follow‑ups are often inconsistent due to:
- Contact details stored in paper forms or Excel
- Follow‑ups relying on memory
- No clear visibility into who needs follow‑up

## v1 Goal
Make follow‑up needs immediately visible so leaders can take timely action.

## Features (v1)
- Centralized People List
- Follow‑up status per person:
  - Not Contacted
  - Contacted
  - Responded
- Notes per follow‑up
- Simple CRUD flow

## Design Decisions
- Manual follow‑up tracking instead of automation
- One follow‑up record per person (v1 constraint)
- People List as the primary screen
- Web‑based implementation for faster iteration

## What v1 Does NOT Include
- Messaging or SMS
- Automated communication
- Notifications
- Reporting or analytics
- Church operations management

These are intentionally excluded to keep v1 focused and usable.

## Tech Stack
- Laravel
- Blade Templates
- MySQL

## Status
This project represents a **v1 MVP** focused on clarity, usability, and real‑world validation.

Future versions may expand functionality based on actual user needs.
