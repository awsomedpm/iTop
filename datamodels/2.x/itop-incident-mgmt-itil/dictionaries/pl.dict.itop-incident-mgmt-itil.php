<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('PL PL', 'Polish', 'Polski', [
	'Class:Incident' => 'Incydent',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Data przydziału',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:child_incidents_list' => 'Zależne incydenty',
	'Class:Incident/Attribute:child_incidents_list+' => 'Wszystkie podrzędne incydenty związane z tym incydentem',
	'Class:Incident/Attribute:cumulatedpending' => 'Skumulowany czas trwania',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'Flaga - Ważny',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'Nie',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'Nie',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Tak',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'Tak',
	'Class:Incident/Attribute:escalation_reason' => 'Powód - Ważny',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:impact' => 'Dotyczy',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => 'Wydział',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'Usługa',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => 'Osoba',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'Ostatnia data trwania',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:origin' => 'Pochodzenie',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:chat' => 'czat',
	'Class:Incident/Attribute:origin/Value:chat+' => 'Incydent utworzony poprzez czat',
	'Class:Incident/Attribute:origin/Value:in_person' => 'osobiście',
	'Class:Incident/Attribute:origin/Value:in_person+' => 'Incydent utworzony w wyniku bezpośredniej dyskusji',
	'Class:Incident/Attribute:origin/Value:mail' => 'e-mail',
	'Class:Incident/Attribute:origin/Value:mail+' => 'e-mail',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:Incident/Attribute:origin/Value:phone' => 'telefon',
	'Class:Incident/Attribute:origin/Value:phone+' => 'telefon',
	'Class:Incident/Attribute:origin/Value:portal' => 'portal',
	'Class:Incident/Attribute:origin/Value:portal+' => 'portal',
	'Class:Incident/Attribute:parent_change_id' => 'Źródłowa zmiana',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Powiązana źródłowa zmiana',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Źródłowy incydent',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'parent_incident_id_friendlyname',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Powiązany źródłowy incydent',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Źródłowy problem',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => 'Powiązany źródłowy problem',
	'Class:Incident/Attribute:parent_problem_ref+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Powód oczekiwania',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:priority' => 'Priorytet',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => 'krytyczny',
	'Class:Incident/Attribute:priority/Value:1+' => 'krytyczny',
	'Class:Incident/Attribute:priority/Value:2' => 'wysoki',
	'Class:Incident/Attribute:priority/Value:2+' => 'wysoki',
	'Class:Incident/Attribute:priority/Value:3' => 'średni',
	'Class:Incident/Attribute:priority/Value:3+' => 'średni',
	'Class:Incident/Attribute:priority/Value:4' => 'niski',
	'Class:Incident/Attribute:priority/Value:4+' => 'niski',
	'Class:Incident/Attribute:public_log' => 'Dziennik publiczny',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:related_request_list' => 'Zależne zgłoszenia',
	'Class:Incident/Attribute:related_request_list+' => '',
	'Class:Incident/Attribute:resolution_code' => 'Kod rozwiązania',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'wsparcie',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => 'wsparcie',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'usterka naprawiona',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'usterka naprawiona',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'naprawa sprzętu',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'naprawa sprzętu',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'inne',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'inne',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'poprawka oprogramowania',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'poprawka oprogramowania',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'aktualizacja systemu',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'aktualizacja systemu',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'szkolenie',
	'Class:Incident/Attribute:resolution_code/Value:training+' => 'szkolenie',
	'Class:Incident/Attribute:resolution_date' => 'Data rozwiązania',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:service_id' => 'Usługa',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Nazwa usługi',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Podkategoria usługi',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Nazwa podkategorii usługi',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'Gwarantowany czas podjęcia (SLA tto) skończył się',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'Gwarantowany czas podjęcia (SLA tto) zaliczony',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'Gwarantowany czas rozwiązania (SLA ttr) skończył się',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'Gwarantowany czas rozwiązania (SLA ttr) zaliczony',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:solution' => 'Rozwiązanie',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:status' => 'Status',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Przypisany',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Zamknięty',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Pilny czas podjęcia',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Pilny czas rozwiązania',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'Nowy',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'Trwający',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Rozwiązany',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'Oczekujący',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:time_spent' => 'Opóźnienie rozwiązania',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:tto' => 'czas na podjęcie (TTO)',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'Ostateczny termin podjęcia (TTO)',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:ttr' => 'czas na rozwiązanie (TTR)',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'Ostateczny termin rozwiązania TTR',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:urgency' => 'Pilność',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => 'krytyczna',
	'Class:Incident/Attribute:urgency/Value:1+' => 'krytyczna',
	'Class:Incident/Attribute:urgency/Value:2' => 'wysoka',
	'Class:Incident/Attribute:urgency/Value:2+' => 'wysoka',
	'Class:Incident/Attribute:urgency/Value:3' => 'średnia',
	'Class:Incident/Attribute:urgency/Value:3+' => 'średnia',
	'Class:Incident/Attribute:urgency/Value:4' => 'niska',
	'Class:Incident/Attribute:urgency/Value:4+' => 'niska',
	'Class:Incident/Attribute:user_comment' => 'Komentarz użytkownika',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'Zadowolenie użytkownika',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Bardzo zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => 'Bardzo zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Dość zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => 'Dość zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Raczej niezadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => 'Raczej niezadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Bardzo niezadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => 'Bardzo niezadowolony',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Nie można przypisać zdarzenia nadrzędnego do samego zdarzenia',
	'Class:Incident/Method:ResolveChildTickets' => 'Rozpatrz zgłoszenia podrzędne',
	'Class:Incident/Method:ResolveChildTickets+' => 'Połącz rozwiązanie kaskadowo ze zgłoszeniem podrzędnym (ev_autoresolve) i dopasuj następujące cechy: usługa, zespół, agent, informacje o rozwiązaniu',
	'Class:Incident/Stimulus:ev_assign' => 'Przydzielony',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Automatyczne zamknięcie',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Automatyczne rozwiązanie',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Zamknij to zgłoszenie',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'Trwający',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Przydzielony ponownie',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Otwórz ponownie',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Oznacz jako rozwiązany',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'Po czasie',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Menu:Incident:EscalatedIncidents' => 'Pilne incydenty',
	'Menu:Incident:EscalatedIncidents+' => 'Pilne incydenty',
	'Menu:Incident:MyIncidents' => 'Incydenty przypisane do mnie',
	'Menu:Incident:MyIncidents+' => 'Incydenty przypisane do mnie (jako Agent)',
	'Menu:Incident:OpenIncidents' => 'Wszystkie otwarte incydenty',
	'Menu:Incident:OpenIncidents+' => 'Wszystkie otwarte incydenty',
	'Menu:Incident:Overview' => 'Przegląd',
	'Menu:Incident:Overview+' => 'Przegląd',
	'Menu:Incident:Shortcuts' => 'Skróty',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:IncidentManagement' => 'Zarządzanie incydentami',
	'Menu:IncidentManagement+' => 'Zarządzanie incydentami',
	'Menu:NewIncident' => 'Nowy incydent',
	'Menu:NewIncident+' => 'Utwórz nowe zgłoszenie incydentu',
	'Menu:SearchIncidents' => 'Szukaj incydentów',
	'Menu:SearchIncidents+' => 'Szukaj zgłoszeń incydentów',
	'Tickets:Related:OpenIncidents' => 'Otwarte incydenty',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Incydenty z ostatnich 14 dni według priorytetu',
	'UI-IncidentManagementOverview-Last-14-days' => 'Liczba incydentów z ostatnich 14 dni',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Otwarte incydenty według agenta',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Otwarte incydenty według klienta',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Otwarte incydenty według statusu',
]);
