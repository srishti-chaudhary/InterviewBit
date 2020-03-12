import { Component, OnInit } from '@angular/core';
import { ApiServiceService } from '../api-service.service';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.scss']
})
export class CreateComponent implements OnInit {

  participants: any[] = null;

  constructor(private ApiService: ApiServiceService) { }

  ngOnInit() {
  }

  getParticipants() {
    this.participants = null;
    let fake = { 
      'tmp': 1 
    };

    this.ApiService.getData("getParticipants", fake).subscribe (result => {
      var tmpRecords = JSON.parse(JSON.stringify(result));
      this.participants = tmpRecords;
      console.log(this.participants);
    });
  }

}
