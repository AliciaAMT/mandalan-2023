export interface Spellbook {
  id: string;
  userId: string;
  charId: string;
  spellNumber: number;
  spellName: string;
  spellType: string;
  spellDescription: string;
  element: string;
  spellImage: string;
  spellLevel: number;
  learned: boolean;
  manaCost: number;
  healLife: number;
  ingredients: string;
  healMana: number;
  offensive: boolean;
  damage: number;

}
