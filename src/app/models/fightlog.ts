export interface Fightlog {
  id: string;
  userId: string;
  charId: string;
  fight: number;
  contents: string;
  dateTime: string;
  enemyName: string;
  enemyLevel: number;
  outcome: string;
}
